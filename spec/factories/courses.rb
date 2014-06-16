# Read about factories at https://github.com/thoughtbot/factory_girl

FactoryGirl.define do
  factory :course do
    year 1
    semester "MyString"
    active false
  end
end
